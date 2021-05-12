Deployment
==========
> Deploying Wordpress on the cheap.

## About
The deployment process to GCP has 3 main phases:
* Clean, Build and Package code
* Build automated machine image
* Update instance group with new image
## Setup

### Build Dockerfile
To build the artifacts a custom Docker image is used (`Dockerfile`) with the required tools. To install it under the Container Registry run:

    gcloud builds submit --tag gcr.io/{project-id}/charlotte-website-build
### Packer
[Packer](https://www.packer.io/docs/builders/googlecompute) allows us to build the immutable machine images. It creates a VM instance, configures it, then takes a snapshot of the instance to create the image.

To use packer on GCP it must first be installed under the Container Registry as a Cloud Build builder.
[Building VM images using Packer.
](https://cloud.google.com/build/docs/building/build-vm-images-with-packer#before_you_begin)

All cofiguration for the Packer build is set in `packer.json`. 

### Bake scripts
These are the scripts ran during the build phase, ordered in `packer.json`. The output from the build is the immutable image used to create the VM instance, so these are the final build steps.

## Deploying
Builds are triggered manually in Cloud Build to build from the `master` branch. Environment variables are specified at this level which are required for the build.

### Rollback
With each build a new image is produced and stored under Compute Engine's image storage. The images are classified under an image family, `charlotte-website`. When the instance group is updated it does not look for a specific image, rather the latest image in the image family.

Deleting the image to roll back from, then triggering an instance group rolling update will force the instances to recreate using the previous (but now latest) machine image.

### Superseded images
The built images are not automatically removed/managed from Compute Engine's image storage. To reduce storage costs, it is worth pruning the older unused images from storage when appropriate.
