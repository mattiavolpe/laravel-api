## 2024-05-24 - Fix IDOR in Project Controller
**Vulnerability:** Missing authorization checks in ProjectController methods (show, edit, update, destroy) allowing users to access or modify other users' projects via Insecure Direct Object Reference (IDOR).
**Learning:** The codebase relies on implicit route model binding but doesn't automatically scope to the authenticated user's relationships. This allows any authenticated user to access any project by ID/slug.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($project->user_id != auth()->id()) abort(403);`) on user-specific resources or use explicit route model binding scopes (e.g., `$project = auth()->user()->projects()->findOrFail($id)`).
