## 2024-05-18 - Prevent IDOR in implicit route model binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to missing authorization checks in controllers using implicit route model binding (e.g., `ProjectController`).
**Learning:** The application relies heavily on implicit route model binding without Laravel Policies. This allows any authenticated user to access, modify, or delete resources belonging to other users simply by providing their IDs in the URL. Global shared taxonomies like `Type` and `Technology` are exceptions.
**Prevention:** Always implement explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) within controller methods handling scoped resources when policies are not used.
