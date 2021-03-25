all: package

package:
	rm -f bundle.tar.gz src.tar
	cd src && tar cf ../src.tar .
	tar czf bundle.tar.gz src.tar deploy
	rm -f src.tar

.PHONY: all package start stop clean
