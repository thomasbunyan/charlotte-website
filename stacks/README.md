Stacks
======
> Hosting Wordpress on the cheap.

## Architecture
![Architecture](architecture.svg)

##  Updates
To update the cloud infrastructure, the stack under deployment manager has to be deleted first. Then the new updated stack can be created by running the following:

    gcloud deployment-manager deployments create charlotte-website-deployment --config charlotte-website.yaml
