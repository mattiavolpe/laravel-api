## 2024-05-16 - Fix IDOR in implicit route model binding
**Vulnerability:** Insecure Direct Object Reference (IDOR) vulnerabilities exist in the `ProjectController`, `TypeController`, and `TechnologyController`. Because implicit route model binding retrieves the record without checking ownership, any authenticated user can view, edit, update, or delete records belonging to other users.
**Learning:** The application uses implicit route model binding without Laravel Policies or explicit controller-level ownership checks, making user-owned entities globally accessible by ID/slug.
**Prevention:** Always use explicit authorization checks (`if ($model->user_id != auth()->id()) abort(403);`) in controller methods, or implement Laravel Policies for user-owned models.
