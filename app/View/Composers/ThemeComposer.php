<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Blog\View\Composers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Modules\Blog\Datas\ArticleData;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Banner;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\Profile;
use Modules\Blog\Models\Tag;
use Modules\UI\Datas\SliderData;
=======
namespace Modules\Cms\View\Composers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Collection;
use Modules\Cms\Datas\FooterData;
use Modules\Cms\Datas\HeadernavData;
use Modules\Cms\Models\Menu;
use Modules\Cms\Models\Page;
use Modules\Cms\Models\PageContent;
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
use Webmozart\Assert\Assert;
=======
namespace Modules\Lang\View\Composers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Lang\Datas\LangData;
use Spatie\LaravelData\DataCollection;
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)

class ThemeComposer
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Show recent categories with their latest .
     *
     * @return Collection<int, Category>
     */
    public function categories()
    {
        return Category::tree()->get()->toTree();
    }

    /**
     * Show recent categories with their latest .
     *
     * @return Collection<int, Category>
     */
    public function getCategoriesArticles()
    {
        return $this->categories();
    }

    public function getArticles(): EloquentCollection
    {
        return Article::all()
            ->sortBy(['created_at', 'desc']);
    }

    public function getArticlesType(string $type, int $number = 6): Collection
    {
        $fun = 'get'.Str::studly($type).'Articles';

        return $this->{$fun}($number);
    }

    public function getFeaturedArticles(int $number = 6): Collection
    {
        $rows = Article::published()
            ->showHomepage()
            ->publishedUntilToday()
            ->take($number)
            ->orderBy('published_at', 'desc')
            ->get();
        if (0 === $rows->count()) {
            $rows = Article::get();
            Article::whereRaw('1=1')->update(['show_on_homepage' => true]);
        }

        return $rows;
    }

    public function getLatestArticles(int $number = 6): Collection
    {
        return Article::published()
            ->publishedUntilToday()
            ->orderBy('published_at', 'desc')
            ->take($number)
            ->get();
    }

    public function getArticlesByCategory(string $category_id, int $number = 6): array
    {
        $rows = Article::where('category_id', $category_id)
            ->orderBy('published_at', 'desc')
            ->take($number)
            ->get();

        return $this->getArticleDataArray($rows);
    }

    public function paginateArticlesByCategory(string $category_id, int $limit = 6): Paginator
    {
        return Article::where('category_id', $category_id)
            ->orderBy('published_at', 'desc')
            ->simplePaginate($limit);
    }

    /*
    public function getAuthors(): Collection
    {
        $rows = Profile::ProfileIsAuthor()
            ->take(4)
            ->get();

        return $rows;
    }
    */

    public function getNavCategories(): Collection
    {
        return Category::has('articles', '>', 0)
            ->take(8)
            ->get();
    }

    public function getFooterCategories(): Collection
    {
        return Category::has('articles', '>', 0)
            ->take(8)
            ->get();
    }

    // --- da fare con parental
    public function getFooterAuthors(): Collection
    {
        // $footerAuthors = Profile::profileIsAuthor()
        // ->take(8)
        $footerAuthors = Profile::inRandomOrder()
            ->limit(8)
            ->get();

        return $footerAuthors;
    }

    public function getTags(): Collection
    {
        return Tag::all();
    }

    public function getFooterTags(): Collection
    {
        return Tag::take(15)->get();
    }

    /**
     * @return Collection<(int|string), mixed>
     */
    public function getMoreArticles(Model $model)
    {
        return collect([]);
    }

    /**
     * @return \Illuminate\Pagination\LengthAwarePaginator<Article>
     */
    public function getPaginatedArticles(int $num = 15)
    {
        return Article::paginate($num);
    }

    public function showArticleSidebarContent(string $slug): \Illuminate\Contracts\Support\Renderable
    {
        Assert::isInstanceOf($article = Article::firstOrCreate(['slug' => $slug], ['sidebar_blocks' => []]), Article::class, '['.__LINE__.']['.__FILE__.']');
        // $page = Page::firstOrCreate(['slug' => $slug], ['content_blocks' => []]);

        $article = new \Modules\UI\View\Components\Render\Blocks(blocks: $article->sidebar_blocks, model: $article);

        return $article->render();
    }

    public function rankingProfilesByCredits(): Collection
    {
        return Profile::all()->sortByDesc('credits');
    }

    public function getMethodData(string $method, int $number = 6): Paginator|array
    {
        return $this->{$method}($number);
    }

    public function getBanner(): array
    {
        $results = Banner::all()->sortBy('pos');
        $tmp = [];
        foreach ($results as $content) {
            $slider_data = $content->toArray();
            $slider_data['link'] = $content->getUrlCategoryPage();
            $tmp[] = SliderData::from($slider_data);
        }

        return $tmp;
    }

    public function getSingleBanner(Banner $banner): SliderData
    {
        return SliderData::from($banner->toArray());
    }

    public function getArticlesFeatured(int $number = 6): Collection
    {
        dddx('wip con article data');

        return $this->getFeaturedArticles($number);
    }

    public function getArticlesLatest(int $number = 6): array
    {
        $results = $this->getLatestArticles($number); // ->toArray();

        return $this->getArticleDataArray($results);
    }

    public function paginatedArticlesLatest(int $limit = 6): Paginator
    {
        return Article::published()
            ->publishedUntilToday()
            ->orderBy('published_at', 'desc')
            ->simplePaginate($limit);
    }

    public function paginatedArticlesComingSoon(int $limit = 6): Paginator
    {
        return Article::published()
            ->where('event_start_date', '>', now())
            ->orderBy('event_start_date')
            ->simplePaginate($limit);
    }

    public function paginatedArticlesOrderByNumberOfBets(int $limit = 6): Paginator
    {
        return Article::published()
            ->publishedUntilToday()
            ->orderBy('wagers_count', 'desc')
            ->simplePaginate($limit);
    }

    public function paginatedArticlesOrderByVolumes(int $limit = 6): Paginator
    {
        return Article::published()
            ->publishedUntilToday()
            ->orderBy('volume_play_money', 'desc')
            ->simplePaginate($limit);
    }

    /**
     * --.
     */
    public function mapArticle(Article|ArticleData $article): ArticleData
    {
        if ($article instanceof ArticleData) {
            return $article;
        }

        $article = $article->toArray();

        if (is_array($article['title'])) {
            $lang = app()->getLocale();
            $article['title'] = $article['title'][$lang] ?? last($article['title']);
        }

        return ArticleData::from($article);
    }

    public function getArticlesComingSoon(int $number = 6): array
    {
        $results = Article::published()
            ->where('event_start_date', '>', now())
            ->orderBy('event_start_date')
            ->take($number)
            ->get();

        return $this->getArticleDataArray($results);
    }

    public function getArticlesOrderByNumberOfBets(int $number = 6): array
    {
        $results = Article::published()
            ->publishedUntilToday()
            ->orderBy('wagers_count', 'desc')
            ->take($number)
            ->get();

        return $this->getArticleDataArray($results);
    }

    public function getArticlesOrderByVolumes(int $number = 6): array
    {
        $results = Article::published()
            ->publishedUntilToday()
            ->orderBy('volume_play_money', 'desc')
            ->take($number)
            ->get();

        return $this->getArticleDataArray($results);
    }

    public function getAllArticles(): array
    {
        $results = Article::orderBy('created_at', 'desc')->get();

        return $this->getArticleDataArray($results);
    }

    public function getArticleDataArray(Collection $rows): array
    {
        $tmp = [];
        foreach ($rows->toArray() as $content) {
            // @phpstan-ignore offsetAccess.nonOffsetAccessible
            if (is_array($content['title'])) {
                $lang = app()->getLocale();
                $content['title'] = $content['title'][$lang] ?? last($content['title']);
            }
            $tmp[] = ArticleData::from($content);
        }

        // dddx($tmp);
        return $tmp;
    }

    public function getArticleModel(string $slug): ?Article
    {
        return Article::where('slug', $slug)->first();
    }

    public function getCategoryModel(string $slug): ?Category
    {
        return Category::where('slug', $slug)->first();
    }

    public function getHotTopics(): array
    {
        return $categories = Category::with([
            'categoryArticles' => fn ($article) => $article->withCount('ratings'),
            // 'banner'
        ])
            ->get()
            ->map(fn ($category): array => [
                'image' => $category->getFirstMediaUrl('category'), // ?? 'https://placehold.co/300x200',
                'slug' => $category->slug,
                'title' => $category->title,
                'ratings_sum' => $category->categoryArticles->sum('ratings_count'),
            ])
            ->sortByDesc('ratings_sum')
            ->take(3)
            ->toArray();
=======
     * Undocumented function.
     *
     * @return array|null
     */
    public function getMenu(string $menu_name)
    {
        $menu = Menu::firstOrCreate(['title' => $menu_name]);

        return $menu->items ?? [];
    }

    public function getMenuUrl(array $menu): string
    {
        if ([] === $menu) {
            return '#';
        }
        $lang = app()->getLocale();
        if ('internal' === $menu['type']) {
            return route('page_slug.view', ['lang' => $lang, 'slug' => $menu['url']]);
        }
        if ('external' === $menu['type']) {
            Assert::string($url = $menu['url']);

            return $url;
        }
        if ('route_name' === $menu['type']) {
            Assert::string($url = $menu['url']);

            return route($url, ['lang' => $lang]);
        }

        return '#';
    }

    public function showPageContent(string $slug): Renderable
    {
        Assert::isInstanceOf($page = Page::firstOrCreate(['slug' => $slug], ['title' => $slug, 'content_blocks' => []]), Page::class, '['.__LINE__.']['.__FILE__.']');
        // $page = Page::firstOrCreate(['slug' => $slug], ['content_blocks' => []]);
        $blocks = $page->content_blocks;
        if (! is_array($blocks)) {
            $blocks = [];
        }
        $page = new \Modules\UI\View\Components\Render\Blocks(blocks: $blocks, model: $page);

        return $page->render();
    }

    public function showPageSidebarContent(string $slug): Renderable
    {
        Assert::isInstanceOf($page = Page::firstOrCreate(['slug' => $slug], ['sidebar_blocks' => []]), Page::class, '['.__LINE__.']['.__FILE__.']');
        // $page = Page::firstOrCreate(['slug' => $slug], ['content_blocks' => []]);

        $page = new \Modules\UI\View\Components\Render\Blocks(blocks: $page->sidebar_blocks, model: $page);

        return $page->render();
    }

    public function showContent(string $slug): Renderable
    {
        Assert::isInstanceOf($page = PageContent::firstOrCreate(['slug' => $slug], ['blocks' => []]), PageContent::class, '['.__LINE__.']['.__FILE__.']');

        if (! is_array($page->blocks)) {
            return view('ui::empty');
        }

        $page = new \Modules\UI\View\Components\Render\Blocks(blocks: $page->blocks, model: $page);

        return $page->render();
    }

    public function getPages(): Collection
    {
        return Page::all();
    }

    public function getPageModel(string $slug): ?Page
    {
        return Page::where('slug', $slug)->first();
    }

    public function getUrlPage(string $slug): string
    {
        $page = $this->getPageModel($slug);
        if ($page instanceof Page) {
            return '/'.app()->getLocale().'/pages/'.$slug;
        }

        return '#';
    }

    public function headernav(): Renderable
    {
        $headernav = HeadernavData::make();

        return $headernav->view();
    }

    public function footer(): Renderable
    {
        $footer = FooterData::make();

        return $footer->view();
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======
     * Get all supported languages as a DataCollection.
     *
     * @throws \Exception if supportedLocales config is not an array
     *
     * @return DataCollection<LangData>
     */
    public function languages(): DataCollection
    {
        $langs = config('laravellocalization.supportedLocales');

        if (! is_array($langs)) {
            throw new \Exception(sprintf('Invalid config for supportedLocales on line %d in %s', __LINE__, class_basename($this)));
        }

        $languages = collect($langs)->map(function (mixed $item, string $locale): array {
            // Ensure $item is an array as expected, otherwise handle error.
            if (! is_array($item) || ! isset($item['regional'], $item['name'])) {
                throw new \InvalidArgumentException(sprintf('Expected array with "regional" and "name" keys at locale %s', $locale));
            }

            // Extract regional code and handle 'en' to 'gb' mapping.
            $regionalCode = explode('_', (string) $item['regional'])[0] ?? 'en';
            if ('en' === $regionalCode) {
                $regionalCode = 'gb';
            }

            $url = '#'; // Placeholder URL for frontend.
            if (inAdmin()) {
                $url = $this->buildAdminLanguageUrl($locale);
            }

            return [
                'id' => $locale,
                'name' => $item['name'],
                'flag' => $this->buildFlagHtml($regionalCode),
                'url' => $url,
            ];
        });

        return LangData::collection($languages->all());
    }

    /**
     * Get all languages except the current one.
     *
     * @return DataCollection<LangData>
     */
    public function otherLanguages(): DataCollection
    {
        $currentLocale = app()->getLocale();

        return $this->languages()
            ->filter(function (mixed $item) use ($currentLocale): bool {
                // Ensure the item is an instance of LangData
                if (! $item instanceof LangData) {
                    throw new \Exception(sprintf('Expected instance of LangData, got %s on line %d in %s', is_object($item) ? get_class($item) : gettype($item), __LINE__, class_basename($this)));
                }

                // Filter out the current locale
                return $item->id !== $currentLocale;
            });
    }

    /**
     * Get a specific field of the current language.
     *
     * @throws \Exception if the current language is not found
     */
    public function currentLang(string $field): string
    {
        $currentLocale = app()->getLocale();

        // Convert DataCollection to a Laravel Collection to use firstWhere()
        $lang = $this->languages()
            ->toCollection()
            ->firstWhere('id', $currentLocale);

        if (! $lang instanceof LangData) {
            throw new \Exception(sprintf('Current language not found on line %d in %s', __LINE__, class_basename($this)));
        }

        return (string) $lang->{$field};
    }

    /**
     * Build the URL for the admin panel based on the current route and parameters.
     */
    private function buildAdminLanguageUrl(string $locale): string
    {
        $routeName = Route::currentRouteName();
        if (! is_string($routeName)) {
            return '#';
        }
        $routeParameters = array_merge(getRouteParameters(), ['lang' => $locale]);
        $queryParameters = request()->all();

        $url = route($routeName, $routeParameters);

        return Request::create($url)->fullUrlWithQuery($queryParameters);
    }

    /**
     * Build the HTML for the language flag.
     */
    private function buildFlagHtml(string $regionalCode): string
    {
        return sprintf(
            '<div class="iti__flag-box"><div class="iti__flag iti__%s"></div></div>',
            e($regionalCode)
        );
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
    }
=======
namespace Modules\Fixcity\View\Composers;

/**
 * -----.
 */
class ThemeComposer {

>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
}
