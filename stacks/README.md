* Compute engine, VM instance
* VPC network, External IP addresses
* Network services, Cloud DNS, Zone details

gcloud deployment-manager deployments update charlotte-website-deployment \
    --config charlotte-website.yaml

gcloud deployment-manager deployments create charlotte-website-deployment \
    --config charlotte-website.yaml
