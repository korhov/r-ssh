FROM sickp/alpine-sshd:latest

RUN passwd -d root

RUN apk update && apk add socat

COPY ssh.pub /root/.ssh/authorized_keys
