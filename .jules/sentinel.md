## 2024-11-08 - Insecure Direct Object Reference (IDOR) via Route Model Binding
**Vulnerability:** IDOR in ProjectController allowing users to view, edit, update, and destroy projects they do not own.
**Learning:** The codebase utilizes implicit route model binding which automatically fetches the model, but lacks explicit user ownership checks for user-specific resources.
**Prevention:** Always manually enforce explicit ownership checks (e.g., if ($model->user_id != auth()->id()) abort(403);) in controller methods handling user-specific resources fetched via route model binding.
