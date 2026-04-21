## 2024-04-21 - Fix IDOR in Controller Methods
**Vulnerability:** Insecure Direct Object Reference (IDOR) where users could edit/delete other users' resources (Projects, Types, Technologies) due to implicit route model binding without ownership checks.
**Learning:** The application uses implicit route model binding but lacks global policies, meaning authorization must be explicitly verified in controller methods to ensure users can only manipulate their own entities.
**Prevention:** Implement explicit ownership checks (`if ($model->user_id != auth()->id()) abort(403);`) for user-owned models (even for taxonomies like Types and Technologies that are defined as user-owned) or adopt Laravel Policies for systematic authorization.
