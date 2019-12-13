# Run wp-cli with docker command

docker run -it --rm \
    --volumes-from bf4213053c95 \
    --network container:bf4213053c95 \
    wordpress:cli user list