all: package

package: clean
	tar -czf app.tar.gz -C src .

clean:
	rm -f app.tar.gz

.PHONY: all clean package
