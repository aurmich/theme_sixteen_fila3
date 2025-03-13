#!/bin/sh
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb

me=$( readlink -f -- "$0";)
git submodule foreach "$me" 

<<<<<<< HEAD
=======
me=$( readlink -f -- "$0";)

git submodule foreach "$me"
>>>>>>> origin/dev
=======
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb
# Branch da mantenere
branches_to_keep="dev master prod"

# Itera su tutti i remote configurati
for remote in $(git remote); do
    echo "Checking remote: $remote"

    # Ottieni la lista di tutti i branch remoti, escludendo quelli da mantenere
<<<<<<< HEAD
<<<<<<< HEAD
    branches_to_delete=$(git branch -r | grep "remotes/$remote/" | sed "s#remotes/$remote/##" | grep -v -E "^(dev|master|prod)$")
=======
    branches_to_delete=$(git ls-remote --heads "$remote" | awk '{print $2}' | sed 's#refs/heads/##' | grep -v -E "^(dev|master|prod)$")
>>>>>>> origin/dev
=======
    branches_to_delete=$(git branch -r | grep "remotes/$remote/" | sed "s#remotes/$remote/##" | grep -v -E "^(dev|master|prod)$")
    #branches_to_delete=$(git ls-remote --heads "$remote" | awk '{print $2}' | sed 's#refs/heads/##' | grep -v -E "^(dev|master|prod)$")
>>>>>>> 16b52a71386f3f18de05038774dbb6fac55e08bb

    # Cancella solo se ci sono branch da eliminare
    if [ -n "$branches_to_delete" ]; then
        for branch in $branches_to_delete; do
            echo "Deleting branch '$branch' from remote '$remote'..."
            git push "$remote" --delete "$branch"
        done
    else
        echo "No branches to delete for remote '$remote'."
    fi
done
