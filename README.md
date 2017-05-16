1. pull down my repo
git clone https://github.com/rdrew/drupal8_vm.git cshr

2. edit the Vagrant file and the drush alias file
grep -rl cshr . | xargs sed -i '' -e 's/cshr/**changeme**/'

3. run "Vagrant up"

4. check cshr.local to confirm

// just the files dir
rsync -avz --progress rdrew@137.149.200.22:/var/www/html/cshr/web/sites/default/files sites/default/files/	

// full code base with exlusions (see vm/rsync_config.txt)
rsync -avz --dry-run --progress --exclude-from 'vm/rsync_config.txt' rdrew@137.149.200.22:/var/www/html/cshr/ .

5. pull down remote database
drush sql-sync @remote @local
