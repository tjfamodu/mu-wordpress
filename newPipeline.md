### Config

The key named "echo-key" is referenced in `mu.yml`. Ensure that you have this key (can be found within Keepass) stored locally within `$HOME/.ssh`

### Spin it up

Start up your pipeline, which will deploy to 2 environments, "test" and
"prod":

    mu pipeline up

Mu will ask you for a GitHub token. CodePipeline uses it to watch your
repo for changes so that it can automatically deploy them.
[Create a new token](https://github.com/settings/tokens) in your own
GitHub account and grant it the "admin:repo_hook" and "admin" permissions.
Save it somewhere, like [a nice password manager](https://1password.com).
Enter it when mu asks for it. (But don't give it to anything else! ;^)

Watch your pipeline get deployed:

    mu pipeline logs -f

### Inspect

When that's done, you can verify that you have 2 environments, "test" and
"prod":

    mu env list

You'll see a table like this:

    +-------------+-----------------------+---------------------+---------------------+------------+
    | ENVIRONMENT |         STACK         |       STATUS        |     LAST UPDATE | MU VERSION |
    +-------------+-----------------------+---------------------+---------------------+------------+
    | test        | mu-cluster-test       | CREATE_COMPLETE     | 2017-05-23 14:48:04 | 0.1.13     |
    | prod        | mu-cluster-prod       | CREATE_COMPLETE     | 2017-05-23 16:23:28 | 0.1.13     |
    +-------------+-----------------------+---------------------+---------------------+------------+

You can view the details on any of the environments:

    mu env show test

If you want to watch the "test" environment's services get deployed, or view
logs from the "test" environment, try these:

    mu service logs -f test
    mu env logs -f test

### Initialize WordPress

When your test environment is initialized, you can load the WordPress
admin installer and get your site started. Find the base URL with:

    mu env show test

You'll see a block at the top that includes "Base URL":

    Environment:    test
    Cluster Stack:  mu-cluster-test (UPDATE_IN_PROGRESS)
    VPC Stack:      mu-vpc-test (UPDATE_COMPLETE)
    Bastion Host:   1.2.3.4
    Base URL:       http://mu-cl-some-long-uuid.us-west-2.elb.amazonaws.com
