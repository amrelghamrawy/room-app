# MongoDB-Based Auditing in Laravel

This guide details how to configure MongoDB for audit logs within a Laravel application.

## Configuration Steps

1. **Endpoint**: `/audit_settings/create`
    - **Method**: GET
    - **Description**:  
      Configuring Auditing Database Settings:
        - **Changing the Database for Auditing**:
            - Specify the desired database type.
            - Provide the corresponding connection string.
        - **Storing Audits in the Same Database**:
            - Leave the connection string empty.
