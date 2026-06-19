## 2024-05-24 - Implicit Route Model Binding IDOR
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project management endpoints.
**Learning:** The codebase frequently utilizes implicit route model binding in controllers without implementing Laravel Policies. This architectural pattern makes the application susceptible to IDOR vulnerabilities as users can manipulate route parameters to access or modify records belonging to other users.
**Prevention:** Always enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) in controller methods, using loose comparison (`!=`) to prevent type mismatch issues, or implement Laravel Policies for all models exposing user-owned data.
