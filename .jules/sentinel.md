## 2024-05-21 - Fix IDOR in ProjectController
**Vulnerability:** Missing authorization checks in implicit route model binding endpoints (show, edit, update, destroy in Admin/ProjectController) allowed any authenticated user to access, modify, or delete projects belonging to other users.
**Learning:** Laravel's route model binding retrieves records without scoping them to the authenticated user unless explicitly told to do so via global scopes, query modifications, or Policies. Controllers lacking explicit ownership checks are vulnerable to Insecure Direct Object Reference (IDOR).
**Prevention:** Always implement Laravel Policies and authorize resources, or add explicit manual ownership checks in controller actions handling resource endpoints.
