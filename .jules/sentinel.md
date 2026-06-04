## 2024-06-04 - Fix IDOR in Project Controller
**Vulnerability:** Insecure Direct Object Reference (IDOR) allows users to access, modify, or delete projects belonging to other users via implicit route model binding without ownership verification.
**Learning:** Implicit route model binding in Laravel does not automatically enforce user ownership policies. It only fetches the model by its primary key or slug.
**Prevention:** Always enforce authorization policies (e.g. `auth()->id() != $model->user_id`) or use Laravel Policies when accessing individual resources via route parameters.