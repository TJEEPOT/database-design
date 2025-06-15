#!/usr/bin/env python
# -*- coding: utf-8 -*-

# Creates the secrets files for a demo test. Not to be used for production - see the secrets in github for prod access.

def create_secrets():
    with open("_docker/web-php.env", "w") as f: # db access .env file details.
        f.write("MYSQL_DATABASE=canarytest\n")
        f.write("MYSQL_USER=devtest\n")
        f.write("MYSQL_PASSWORD=devtestpass1\n")
        f.write("MYSQL_ROOT_PASSWORD=root\n")

if __name__ == "__main__":
    create_secrets()