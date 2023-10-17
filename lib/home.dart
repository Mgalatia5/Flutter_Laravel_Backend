import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: SafeArea(
        child: Scaffold(
          appBar: AppBar(
            actions: const [Icon(Icons.menu)],
            title: const Center(
              child: Text(
                "CRUD OP",
                style: TextStyle(color: Colors.black54),
              ),
            ),
            leading: const Icon(Icons.arrow_back),
          ),
        ),
      ),
    );
  }
}
