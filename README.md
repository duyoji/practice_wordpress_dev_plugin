# Run wp-cli with docker command

## Show users

docker run -it --rm \
    --volumes-from bf4213053c95 \
    --network container:bf4213053c95 \
    wordpress:cli user list

## Dump DB

docker run -it --rm \
    --volumes-from bf4213053c95 \
    --network container:bf4213053c95 \
    wordpress:cli db export wordpress_20191213_170715.sql