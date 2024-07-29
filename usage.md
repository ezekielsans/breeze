storage for export
resources frontend

# don't include vendor for deployment // 3rd party dependency

# if deployed on cloud then create new vendor folder

# php artisan serve // to start local after installation of php

# .env file = sensitive data

# php artisan migrate

# php artisan key:generate

# GIT COMMANDS

# git branch // to check if

# git reset

# git config user.email "enter email here"

# git remote add origin link

# rm -rf git

# git clone //clone file

# git checkout -b branch name // switch from master to branch

# git config user.name username // add github username for auth

# git config user.email email // add github email for auth

# git fetch // get all data from the repo's

# php artisan up

# php artisan down //for maintenance purposes

controller - functions / logic
model - access point to the database

master/main - staging - development

master/main <- staging <- development

staging = pre-prod

Jira - Scrum , min 2 weeks dev timeframe - Highest priority first

    todo -> in prog -> review -> done

Kanban

Views = frontend
Controller & Model = backend

dd() - to return a object or array

---

DAY 2

authorization -> validation -> storing

procedural -> framework

---

DAY 3
start breaking down by MVC method:

-   route first - controller - view
    breakdown -> feature by feature
    slots
    components

auth -> validation -> saving

table names = make it plural (best practice)
factory = dummy columns to populate

naming conventions

Model:
seeder & factory -> testing , dummies

migration ----> db \* all modifications should go here - renaming column, - drop column, - altering tables

Chunk -> batch processing

cron job -> scheduled automation

--make:job
--make:command
