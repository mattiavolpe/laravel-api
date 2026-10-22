## 2023-10-24 - Fix IDOR in ProjectController
**Vulnerability:** Insecure Direct Object Reference (IDOR) in show, edit, update, and destroy methods of ProjectController.
**Learning:** Implicit route model binding does not automatically verify ownership, allowing users to access other users' projects if they know the project ID.
**Prevention:** Always manually enforce explicit ownership checks for user-specific resources when using implicit model binding.
