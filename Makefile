all: package

package:
	rm -f bundle.tar.gz
	cd src && tar czf ../bundle.tar.gz . && cd -


start:
	cd src/srv/charlotte-website && docker-compose up -d

stop:
	cd src/srv/charlotte-website && docker-compose stop

clean:
	cd src/srv/charlotte-website && docker-compose down -v

.PHONY: all package start stop clean
