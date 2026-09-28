## 2024-05-24 - Missing Authorization Checks in Controller
**Vulnerability:** IDOR (Insecure Direct Object Reference) in ProjectController.
**Learning:** Implicit route model binding in Laravel doesn't automatically restrict records to the authenticated user unless scoped or explicit checks are added.
**Prevention:** Always ensure user ownership is verified (e.g., `$model->user_id == auth()->id()`) when accessing specific resources through implicit model binding in controllers where users should only access their own data.
