## 2024-07-15 - Implicit Route Binding IDOR Risks
**Vulnerability:** Insecure Direct Object Reference (IDOR) vulnerabilities in controllers using implicit route model binding.
**Learning:** The application uses route model binding without Laravel Policies, defaulting to no authorization checks. While `ProjectController` requires explicit ownership checks (`user_id` matches), `Type` and `Technology` models, despite having a `user_id` field, act as global shared taxonomies. Applying strict ownership checks to them causes functional regressions.
**Prevention:** Always manually enforce ownership checks (`if ($model->user_id != auth()->id()) abort(403);`) on user-owned resources like `Project`. Avoid adding these checks to global taxonomies like `Type` and `Technology`.
