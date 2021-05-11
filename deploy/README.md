Deployment
==========
> Deploying Wordpress on the cheap.

## About
The deployment process to GCP has 3 main phases:
* Clean, Build and Package code
* Build automated machine image
* Update instance group
## Setup

### Build Dockerfile
...
### Packer
[Packer](https://www.packer.io/docs/builders/googlecompute) allows us to build the immutable machine images. It creates a VM instance, configures it, then takes a snapshot of the instance to create the image.

To use packer on GCP it must first be installed as a Cloud Build builder.
[Building VM images using Packer.
](https://cloud.google.com/build/docs/building/build-vm-images-with-packer#before_you_begin)

## Bake scripts
...

## Deploying
...

### Superseded images
...
