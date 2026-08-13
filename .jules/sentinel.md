## 2024-10-24 - Missing Authorization in Implicit Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) in Admin controllers using route model binding without policies.
**Learning:** The application uses implicit route model binding (e.g., `Project $project`) without corresponding Laravel Policies. As a result, records are fetched globally by ID, completely bypassing the user-ownership scopes established in `index()` and `store()`.
**Prevention:** Enforce strict authorization checks explicitly in controller methods (e.g., `if ($model->user_id !== auth()->id()) abort(403);`) when returning specific records via model binding if Policies are not implemented.
