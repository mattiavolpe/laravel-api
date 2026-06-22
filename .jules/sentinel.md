## 2026-06-22 - Missing Authorization (IDOR) on Project Resources
**Vulnerability:** The Admin `ProjectController` allows any authenticated user to view, edit, update, or delete projects belonging to other users because it lacks explicit ownership checks (Insecure Direct Object Reference).
**Learning:** The application relies on implicit route model binding in controllers without implementing Laravel Policies, making it susceptible to IDOR vulnerabilities unless explicit ownership checks are manually enforced.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) in controller methods that handle sensitive resources when Laravel Policies are not utilized.
