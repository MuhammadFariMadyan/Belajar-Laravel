Vagrant.configure(2) do |config|
  config.vm.box = 'ubuntu/trusty64'
  config.vm.provider 'virtualbox' do |v|
    v.memory = 2048
  end
  config.vm.provision 'shell', path: 'setup.sh'
  config.vm.network 'forwarded_port', guest: 80, host: 8080
  config.vm.synced_folder 'Projects', '/home/vagrant/Projects', create: true, owner: 'www-data', group: 'www-data'
end
