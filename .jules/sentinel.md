## 2024-07-23 - Fix IDOR in ProjectController
**Vulnerability:** Implicit route model binding in ProjectController lacks authorization checks, allowing Insecure Direct Object Reference (IDOR).
**Learning:** The application relies on implicit route model binding without Laravel Policies, meaning anyone with a valid ID can access or modify other users' projects unless explicit ownership checks are implemented in each controller method.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) or utilize Laravel Policies when using implicit route model binding for user-specific resources.
