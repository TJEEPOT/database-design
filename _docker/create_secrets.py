#!/usr/bin/env python
# -*- coding: utf-8 -*-

# Creates the secrets files for a demo test. Not to be used for production - see the secrets in github for prod access secrets.

def create_secrets():
    with open("web-php.env", "w") as f: # db access .env file details.
        f.write("MYSQL_DATABASE=canarytest")
        f.write("MYSQL_USER=devtest")
        f.write("MYSQL_PASSWORD=devtestpass1")
        f.write("MYSQL_ROOT_PASSWORD=root")

if __name__ == "__main__":
    create_secrets()