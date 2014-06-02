# coding: utf-8
from fabric.api import env, local, cd, run
from fabric.colors import *
from fabric.operations import put

env.hosts = "al.ptphp.com"
env.user = "root"
env.usesshconfig = True
env.timeout = 20
remote_dir = "/var/projects/www.ptphp.com"

def push():
    local('git add --all')
    local('git commit -m "deploy"')
    local('git push origin master')

def init_product():
	run("mkdir -p "+ remote_dir)
	run("chown -R joseph:joseph "+ remote_dir)
	run("chmod -R  755 "+ remote_dir)
	with cd(remote_dir):
		run("sudo -u joseph -H git init")
		run("sudo -u joseph -H git remote add origin git@github.com:ptphp/ptphp-com.git")
		run("sudo -u joseph -H git pull origin master")
		
def reload_nginx():
	run("service nginx reload")
	
def deploy():	
    with cd(remote_dir):
        run("sudo -u joseph -H git pull origin master")