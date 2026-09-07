## 2024-05-24 - Implicit Route Model Binding IDOR
**Vulnerability:** IDOR (Insecure Direct Object Reference) in `ProjectController` where any authenticated user could view, edit, update, or delete projects belonging to other users.
**Learning:** Implicit Route Model Binding retrieves the model based on the URL parameter but does not inherently scope the query to the currently authenticated user, requiring manual authorization checks.
**Prevention:** Always implement explicit authorization checks (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) or use Laravel Policies when using Route Model Binding for user-owned resources.
