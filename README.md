# Spryker B2B Demo Shop Training


###  Clone the Docker SDK:
```bash
git clone git@github.com:spryker/docker-sdk.git docker
```

#### Set up a development environment

1. Bootstrap the docker setup:

```bash
docker/sdk boot deploy.dev.yml
```

2. If the command you've run in the previous step returned instructions, follow them.

3. Build and start the instance:
```bash
docker/sdk up
```

4. Switch to your branch, re-build the application with assets and demo data from the new branch:

```bash
git checkout {your_branch}
docker/sdk boot -s deploy.dev.yml
docker/sdk up --build --assets --data
```

> Depending on your requirements, you can select any combination of the following `up` command attributes. To fetch all the changes from the branch you switch to, we recommend running the command with all of them:
> - `--build` - update composer, generate transfer objects, etc.
> - `--assets` - build assets
> - `--data` - get new demo data

You've set up your Spryker B2B Demo Shop and can access your applications.




## Troubleshooting installation of the B2B Demo Shop

This section describes the most common issues related to the installation of the B2B Demo Shop.

For a complete troubleshooting, see [Troubleshooting Spryker installation issues](https://docs.spryker.com/docs/dg/dev/set-up-spryker-locally/troubleshooting-installation/an-error-during-front-end-setup.html).

**when**

You get unexpected application behavior or errors.

**then**

1. Check the state of the directory:
```bash
git status
```

2. If there are untracked files (returned in red), and they are not necessary, remove them.

3. Restart file synchronization and rebuild the codebase:
```bash
docker/sdk trouble
docker/sdk boot -s deploy.dev.yml
docker/sdk up --build --assets
```

**when**
You do not see the expected demo data on the Storefront.

**then**

1. Open the [queue broker](http://queue.spryker.local) and wait until all the queues are empty.

2. If the queues are empty, and the issue persists, reload the demo data:
```bash
docker/sdk trouble
docker/sdk boot -s deploy.dev.yml
docker/sdk up --build --assets --data
```
### useful commands
Generate IDE auto completion files.
`dev:ide-auto-completion:generate` 

