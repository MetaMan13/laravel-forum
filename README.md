text-gray-600 dark:text-gray-300
border-gray-200 dark:border-gray-700
bg-gray-50 ( normal ) dark: bg-gray-800
bg-white ( hover, focus, etc states )


projects
    id - integer
    name - string

environments
    id - integer
    project_id - integer
    name - string

deployments
    id - integer
    environment_id - integer
    commit_hash - string


user
    id

group
    id

group_user
    group_id
    user_id