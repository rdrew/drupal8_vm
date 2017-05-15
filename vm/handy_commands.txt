1. pull down my repo
git clone https://github.com/rdrew/robs_d8_vm.git __remotesitename__

2. edit the Vagrant file and the drush alias file
grep -rl __remotesitename__ . | xargs sed -i '' -e 's/__remotesitename__/**changeme**/'

3. run "Vagrant up"

4. check __remotesitename__.local to confirm

// just the files dir
rsync -avz --progress rdrew@137.149.200.22:/var/www/html/__remotesitename__/web/sites/default/files sites/default/files/	

// full code base with exlusions (see vm/rsync_config.txt)
rsync -avz --dry-run --progress --exclude-from 'vm/rsync_config.txt' rdrew@137.149.200.22:/var/www/html/__remotesitename__/ .

5. pull down remote database
drush sql-sync @remote @local
