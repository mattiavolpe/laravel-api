## 2024-07-25 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources via implicit route model binding in controllers.
**Learning:** The codebase relies on implicit route model bindings without Laravel Policies. Controllers like `Type` and `Technology` represent global taxonomies and should intentionally not enforce IDOR checks to prevent functional regressions, whereas resources like `Project` require explicit `user_id` ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`).
**Prevention:** Always manually enforce authorization checks in controllers using implicit route model binding when accessing user-owned resources, while omitting checks for shared taxonomies.
