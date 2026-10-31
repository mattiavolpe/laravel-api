## 2026-10-31 - Route Model Binding IDOR
**Vulnerability:** Insecure Direct Object Reference (IDOR) due to missing ownership checks when using implicit route model binding in user-specific resources.
**Learning:** Laravel's implicit route model binding automatically retrieves the model based on the URL parameter, but it does not inherently scope the query to the authenticated user unless explicitly configured or scoped. This allows users to access resources they don't own if ownership checks are missing.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) in controller methods (show, edit, update, destroy) for user-owned resources when using default implicit route model binding.
