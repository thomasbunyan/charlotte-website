all: package

package:
	rm -f package.tar.gz
	tar -czf package.tar.gz ./deploy ./nginx ./src ./docker-compose.yml ./.template.env

.PHONY: all package
