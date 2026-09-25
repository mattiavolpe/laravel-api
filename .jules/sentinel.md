## 2024-05-20 - Fix IDOR in Project Controller
**Vulnerability:** IDOR (Insecure Direct Object Reference) allowing users to access, edit, update, or delete other users' projects due to missing ownership checks in implicitly bound routes.
**Learning:** Laravel's implicit route model binding automatically retrieves the model based on the route parameter but does not inherently scope it to the authenticated user unless explicitly configured or checked.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on user-specific resources or use explicit route binding scoping.
