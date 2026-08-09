## 2024-05-24 - Missing Authorization Checks on Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources
**Learning:** The application uses implicit route model binding in controllers (e.g., `ProjectController`) without implementing Laravel Policies. This makes the application susceptible to IDOR unless explicit ownership checks are manually enforced in the controller methods.
**Prevention:** Implement Laravel Policies or enforce manual ownership checks `if ($model->user_id != auth()->id()) abort(403);` on all controller methods modifying or displaying user-owned models fetched via implicit route model binding.
