
# Using MongoDB for Audits in Laravel

You can leverage MongoDB to store your audits table in a Laravel application. Follow these steps to set up MongoDB for auditing:

## Steps

1. **Endpoint**: `/audit_settings/create`
    - **Method**: GET
    - **Description**:  if you want to change the database for audit 
        select the database type and the connection string for it 
        if you want audits in the same database leave the connection empty 
    - **Request Body**:

    - **Response**:
    ``` Returns a Blade page (AuditSettingsForm)
    ```
