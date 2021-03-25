all: package

package:
	rm -f bundle.tar.gz
	cd src && tar czf ../bundle.tar.gz . && cd -

.PHONY: all package
