## 2024-08-04 - Fix Insecure Direct Object Reference (IDOR) in ProjectController
**Vulnerability:** The application uses implicit route model binding in controllers without enforcing authorization checks, allowing authenticated users to access, edit, update, or delete projects belonging to other users.
**Learning:** Due to the absence of Laravel Policies and manual authorization checks, implicit route model binding makes the application susceptible to Insecure Direct Object Reference (IDOR) vulnerabilities.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) or implement Laravel Policies for resource methods.
