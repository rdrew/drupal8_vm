1. pull down my repo
git clone https://github.com/rdrew/drupal8_vm.git __remotesitename__

2. edit the Vagrant file and the drush alias file
grep -rl __remotesitename__ . | xargs sed -i '' -e 's/__remotesitename__/**changeme**/'

3. run "composer install" in project root

4. run "Vagrant up"

5. check __remotesitename__.local to confirm

6. Pull down remote codebase

// full code base with exlusions (see vm/rsync_config.txt)
rsync -avz --dry-run --progress --exclude-from 'vm/rsync_config.txt' rdrew@137.149.200.22:/var/www/html/__remotesitename__/ .

7. run composer install in root dir

8. run "composer require --dev geerlingguy/drupal-vm" (may not need to but cant hurt)

9. pull down remote database
drush sql-sync @remote @local

======================================================
// just the files dir
rsync -avz --progress rdrew@137.149.200.22:/var/www/html/__remotesitename__/web/sites/default/files sites/default/files/	
