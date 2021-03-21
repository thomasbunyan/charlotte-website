all: package

package:
	rm -f package.tar.gz
	tar -czf package.tar.gz .

.PHONY: all package
