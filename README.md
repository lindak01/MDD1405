MDD1405
=======

Portfolio Deployment Plan

In order to deploy the Portfolio to the server please follow the deployment plan below.

1. Merge the project-ideas branch into the Master branch on your local machine and then ensure that you sync Git remotely.

    1. $ git checkout master
        This will switch you to the local master branch
    2. $ git pull github master
        Resolve any conflicts.
            After conflicts are resolved and saved:
                $ git add -A
                $ git commit -am 'Commit message'
                $ git pull github master
    3. $ git merge project-ideas
        Resolve any conflicts(see above)
    4. Test
    5. $ git push github master
        
        
    
        