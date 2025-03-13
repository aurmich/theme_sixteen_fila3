#!/bin/sh

# Controllo parametri
<<<<<<< HEAD
if [ "$#" -ne 2 ]; then
    echo "Utilizzo: $0 <nuova-organizzazione> <branch>"
    exit 1
fi

NEW_ORG="$1"
BRANCH="$2"

# Nome dello script stesso per la chiamata ricorsiva
ME=$(readlink -f -- "$0")
WHERE=$(pwd)

# Ottiene il nome della repository corrente
REPO_NAME=$(basename "$(git rev-parse --show-toplevel)")

# Costruisce il nuovo URL remoto
NEW_REMOTE="git@github.com:$NEW_ORG/$REPO_NAME.git"

echo "📥 [MAIN] Pull da $NEW_REMOTE (branch: $BRANCH)"

# Configurazioni globali per evitare problemi
=======
if [ -z "$1" ] || [ -z "$2" ]; then
    echo "Usage: $0 <organization> <branch>"
    exit 1
fi

org="$1"
branch="$2"
repo_name=$(basename "$(git rev-parse --show-toplevel)")
script_path=$(readlink -f -- "$0")
where=$(pwd)

echo "-------- START SYNC [$where ($branch) - ORG: $org] ----------"

# 1️⃣ Configurazioni globali per evitare problemi
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
git config core.fileMode false
git config core.ignorecase false
git config advice.skippedCherryPicks false

<<<<<<< HEAD
# Sincronizzazione submoduli
git submodule sync --recursive
git submodule update --progress --init --recursive --force --merge --rebase --remote
git submodule foreach "$ME" "$NEW_ORG" "$BRANCH"

# Fetch delle ultime modifiche dal repository principale
git fetch origin --progress --prune

# Checkout del branch corretto
if git show-ref --verify --quiet refs/heads/"$BRANCH"; then
    git checkout "$BRANCH"
else
    git checkout -t origin/"$BRANCH" || git checkout -b "$BRANCH"
fi

# Pull con gestione dei conflitti
git pull --rebase origin "$BRANCH" --autostash --recurse-submodules --allow-unrelated-histories --prune --progress -v || {
    echo "Rebase failed, attempting conflict resolution..."
    
    # Tentativo di continuare il rebase automaticamente
=======
# 2️⃣ Sincronizziamo i submoduli PRIMA di lavorare sul repository principale
git submodule sync --recursive
git submodule update --progress --init --recursive --force --merge --rebase --remote
git submodule foreach "$script_path" "$org" "$branch"

# 3️⃣ Sincronizziamo il repository principale
git fetch origin --progress --prune
if git show-ref --verify --quiet refs/heads/"$branch"; then
    git checkout "$branch"
else
    git checkout -t origin/"$branch" || git checkout -b "$branch"
fi

# 4️⃣ Pull con gestione dei conflitti
git pull --rebase origin "$branch" --autostash --recurse-submodules --allow-unrelated-histories --prune --progress -v || {
    echo "Rebase failed, attempting conflict resolution..."
    
    # 🔄 Tentiamo di continuare il rebase automaticamente
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
    if git rebase --continue; then
        echo "Rebase continued successfully."
    else
        echo "Rebase conflicts detected. Attempting automatic resolution..."

<<<<<<< HEAD
        # Risoluzione automatica dei conflitti prendendo la versione remota
=======
        # 🛠 Risolviamo automaticamente i conflitti prendendo la versione remota
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
        git diff --name-only --diff-filter=U | while read file; do
            git checkout --theirs "$file"
            git add "$file"
        done

<<<<<<< HEAD
        # Proviamo a completare il rebase
=======
        # 🛠 Proviamo a completare il rebase
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
        git rebase --continue || {
            echo "Rebase auto-fix failed. Aborting..."
            git rebase --abort
            echo "Attempting merge instead..."
<<<<<<< HEAD
            git merge origin/$BRANCH || {
=======
            git merge origin/$branch || {
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
                echo "Merge also failed. Manual intervention required!"
                exit 1
            }
        }
    fi
}

<<<<<<< HEAD
# Normalizzazione e commit automatico se ci sono modifiche
git add --renormalize -A
git commit -am "Auto-update" || echo '⚠️ Nessuna modifica da committare'

# Push con gestione di eventuali errori
git push origin "$BRANCH" --progress || {
    echo "Push failed, attempting rebase and retry..."
    git pull --rebase origin "$BRANCH" && git push origin "$BRANCH"
}

echo "✅ PUSH COMPLETATO [$WHERE ($BRANCH)]"

# Configurazione tracking del branch
if ! git rev-parse --abbrev-ref --symbolic-full-name "@{u}" >/dev/null 2>&1; then
    git branch --set-upstream-to=origin/$BRANCH "$BRANCH" || true
    git branch -u origin/$BRANCH || true
fi

# Aggiornamento finale dei submoduli e pull dalla nuova organizzazione
git submodule update --progress --init --recursive --force --merge --rebase --remote
git pull "$NEW_REMOTE" "$BRANCH" --autostash --recurse-submodules --allow-unrelated-histories --prune --progress -v --rebase

echo "✅ PULL COMPLETATO [$WHERE ($BRANCH)]"
=======
# 5️⃣ Normalizziamo i file e committiamo se ci sono modifiche
git add --renormalize -A
git commit -am "sync update" || echo '--------------------------- No changes to commit'

# 6️⃣ Push delle modifiche con retry
git push origin "$branch" --progress || {
    echo "Push failed, attempting rebase and retry..."
    git pull --rebase origin "$branch" && git push origin "$branch"
}

echo "-------- END PUSH [$where ($branch)] ----------"

# 7️⃣ Configuriamo il tracking del branch, se necessario
if ! git rev-parse --abbrev-ref --symbolic-full-name "@{u}" >/dev/null 2>&1; then
    git branch --set-upstream-to=origin/$branch "$branch" || true
    git branch -u origin/$branch || true
fi

echo "-------- END SYNC [$where ($branch) - ORG: $org] ----------"
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
