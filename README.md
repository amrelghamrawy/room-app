# Using MongoDB for Audits in Laravel

You can leverage MongoDB to store your audits table in a Laravel application. Follow these steps to set up MongoDB for auditing:

## Steps

1. **Endpoint**: `/audit_settings/create`
    - **Method**: GET
    - **Description**:  If you intend to change the database for auditing purposes:
                            - Specify the desired database type.
                            - Provide the corresponding connection string.
                        If you prefer to store audits in the same database:
                            - Leave the connection string empty.
