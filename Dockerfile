FROM node
WORKDIR /usr/src/wp-stateless
COPY . /usr/src/wp-stateless
RUN make
