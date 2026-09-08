## 2024-05-18 - IDOR in Route Model Binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) on Project resources
**Learning:** Implicit route model binding in Laravel does not automatically enforce user ownership checks. User-specific resources (like `ProjectController`) must have explicit authorization checks to prevent unauthorized access.
**Prevention:** Always manually enforce explicit ownership checks (e.g., `if ($model->user_id != auth()->id()) abort(403);`) on controller methods that handle user-specific resources.
