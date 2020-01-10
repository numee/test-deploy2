name: Deploy updates

on:
  push:
    branches: master

jobs:
  deploy:

    runs-on: ubuntu-18.04

    steps:
    - name: Deploy updates
      run: |
        sshpass -p ${{ SSH_PASS }} ssh \
        -tt ${{ SSH_USER }}@${{ SSH_HOST }} \
        -o StrictHostKeyChecking=no \
        "appname=${{ APP_NAME }} && $(wget --no-cache -o /dev/null -O- https://raw.githubusercontent.com/RomainFallet/symfony-dev-deploy/master/ubuntu18.04_update_app.sh)"
