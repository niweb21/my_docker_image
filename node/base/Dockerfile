FROM ubuntu:16.04

ENV LANG C.UTF-8
ENV LANGUAGE C:en
ENV LC_ALL C.UTF-8

RUN apt-get update \
    && apt-get update \
    && apt-get install -y \
        xz-utils \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

ADD https://nodejs.org/dist/v7.8.0/node-v7.8.0-linux-x64.tar.xz /tmp/node

RUN mkdir /opt/nodejs
RUN tar -xf /tmp/node -C /opt/nodejs
RUN ln -s /opt/nodejs/node-v7.8.0-linux-x64 /opt/nodejs/current

RUN ln -s /opt/nodejs/current/bin/node /bin/node
RUN ln -s /opt/nodejs/current/bin/npm /bin/npm

ENV PATH="/opt/nodejs/current/bin:${PATH}"
